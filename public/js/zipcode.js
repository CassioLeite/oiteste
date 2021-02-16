function getZipCode() {
    var zipcode = document.getElementById('zipcode').value;
    zipcode = zipcode.replace('-', '');
    
    if(zipcode.length == 8) {
        var url = `https://viacep.com.br/ws/${zipcode}/json/`;

        fetch(url)
            .then((resp) => resp.json())
            .then(function(data) {
                document.getElementById('street').value = data.logradouro;
                document.getElementById('neighborhood').value = data.bairro;
                document.getElementById('city').value = data.localidade;
                document.getElementById('uf').value = data.uf;
            })
            .catch(function(error) {
                console.log('error');
            });  
    }
}

document.getElementById("btn-store").addEventListener("click", function(event){
    event.preventDefault()
});