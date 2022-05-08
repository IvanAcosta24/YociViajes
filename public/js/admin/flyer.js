var route = document.querySelector("[name=route]").value;
var urlFlyer = route + "/getFlyer";
var urlSaveFlyer = route + "/saveFlyer";
var urlDeleteFlyer = route + "/deleteFlyer";
new Vue({
    http: {
        headers: {
            "X-CSRF-TOKEN": document
                .querySelector("#token")
                .getAttribute("value"),
        },
    },
    el: "#flyer",
    data: {
        flyers: [],
        flyer_path: "",
        flyer_preview: "",
        errors: [],
    },
    created() {
        this.getFlyers();
    },
    methods: {
        showModalAddFlyer() {
            $("#selectFlyer").modal("show");
        },
        getFlyers() {
            this.$http.get(urlFlyer).then(function (json) {
                this.flyers = json.data;
            });
        },
        selectFlyer(e) {
            this.flyer_path = e.target.files[0];
            this.flyer_preview = URL.createObjectURL(this.flyer_path);
        },
        saveFlyer() {
            var data = new FormData();
            data.set("flyer", this.flyer_path);
            var config = {
                header: { "Content-Type": "image/*" },
            };
            this.$http
                .post(urlSaveFlyer, data, config)
                .then(function (json) {
                    this.errors = "";
                    this.getFlyers();
                    this.modalSuccess();
                    $("#selectFlyer").modal("hide");
                })
                .catch(function (json) {
                    if (json.status === 422) {
                        this.errors = json.data.errors;
                    }
                });
        },
        deleteFlyer(id) {
            Swal.fire({
                title: "¿Estás seguro?",
                text: "No podrás revertirlo!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si, Borralo!",
                cancelButtonText: "No, Cancelar",
            }).then((result) => {
                if (result.value) {
                    this.$http
                        .delete(urlDeleteFlyer + "/" + id)
                        .then(function (json) {
                            console.log(json);
                            this.modalSuccess();
                            this.getFlyers();
                        })
                        .catch(function (json) {
                            if (json.status === 422) {
                                this.errors = json.data.errors;
                            }
                            console.log(json);
                        });
                }
            });
        },
        modalSuccess() {
            Swal.fire({
                position: "center",
                icon: "success",
                title: "Realizado con éxito!",
                showConfirmButton: false,
                timer: 1500,
            });
        },
    },
});
