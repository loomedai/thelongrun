export default class Film {
    constructor() {
        this.data = {
            password:"Ghibli"
        }
        this.rootElem = document.querySelector('.film');
        this.filter = this.rootElem.querySelector('.filter');
        this.items = this.rootElem.querySelector('.items');
        this.nameSearch = this.filter.querySelector('.nameSearch');

    }

    async init(){
        this.nameSearch.addEventListener('input', ()=>{
            if(this.nameSearch.value.length >= 2){
                this.render()
            }
        });

        await this.render();

    }

    async render(){
        const data = await this.getData();
        console.log(data);


        const row = document.createElement('div');
        row.classList.add('row', 'g-4');

        for(const item of data){
            const col = document.createElement('div');
            col.classList.add('col-md-6', 'col-lg-4', 'col-xl-3');

            col.innerHTML = `
                <div class="card order">
                    <img src="uploads/${item.prodPhoto}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-titel mb-3">${item.prodTitel}</h5>
                        
                        <a href="arrietty.php?prodId=${item.prodId}" class="btn btn-secondary text-white w-100">Læs mere</a>
                </div>
                </div>
                
        `;
            row.appendChild(col);

        }
        this.items.innerHTML = '';
        this.items.appendChild(row);

    }

    async getData(){
        this.data.nameSearch = this.nameSearch.value;

        const response = await fetch('api.php', {
            method: "POST",
            body:JSON.stringify(this.data)
        });
        return await response.json();


    }



}