var urlHotelBeds = "/apiHotelBeds";
new Vue({
    el: "#hotelbeds",
    data: {
        hotels: [],
    },
    created() {
        this.getHotels();
    },
    methods: {
        getHotels() {
            this.$http.get(urlHotelBeds).then(function (json){
                this.hotels = json.data.hotels;
            })
        },
    },
});
