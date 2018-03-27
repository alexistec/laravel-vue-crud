new Vue({
    el : '#crud',
    created: function(){
        this.getKeeps();
    },
    data: {
        keeps: []
    },
    methods:{
        getKeeps : function(){
            var urlKeeps = 'tasks';
            axios.get(urlKeeps).then(response=>{
                this.keeps = response.data;
            })
        },
        deleteKeeps : function(id){
            var url = 'tasks/'+id;
            axios.delete(url).then(response=>{
                alert("Eliminado");
                this.getKeeps();
            })
        }
    }
})