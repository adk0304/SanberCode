var items = [
    ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'img/logitek.jpg'], 
    ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'img/msi.jpg'],
    ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'img/genius.jpeg'],
    ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'img/jerry.jpg']
]


function printItems (array) {
	// body... 
	var listCard =""
	for(var i=0; i < array.length;i++){
		//Component Card dari Bootstrap
	listCard += `<div class="card" style="width: 18rem;">
						<img src="${items[i][4]}" class="card-img-top" alt="...">
						<div class="card-body">
	    				<h5 class="card-title" id="itemName">${items[i][1]}</h5>
	    				<p class="card-text" id="itemDesc">${items[i][3]}</p>
	    				<p class="card-text">Rp ${items[i][2]}</p>
	    				<a href="#" class="btn btn-primary" id="addCart">Tambahkan ke keranjang</a>
						</div>
				</div>`
			}
			return listCard
}

document.getElementById("listBarang").innerHTML = printItems(items)

//release 1 search
//tangkap event submit adri fromItem
//di event handle tangkap value dari input id=keyboard
//diltering array items menjadi array baru filteredItems
//print cards dg fungsi printItems dengan parameter input nya filteredItems

var formSearch = document.getElementById("formItem")
formSearch.addEventListener("submit", function(evt){
		//mencegah reload
		evt.preventDefault()
		//mengambil value dari keyboard
		var keyboard = document.getElementById("keyword").value

		var filteredItems = filtering(keyword)
		console.log(filteredItems)
		document.getElementById("listBarang").innerHTML=printItems(filteredItems)
		}
	)

function filtering(string){
	var filteredItems=[]
	for(var j=0;j< items.length; j++){
		var itemsNameLowerCase = items[j][1].toLowerCase()
		var stringToLowerCase = string.toLowerCase()
		if (itemsNameLowerCase.include(stringToLowerCase)) {
			filteredItems.push(items[j])
		}
		return filteredItems
	}
}