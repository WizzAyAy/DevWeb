let table = document.createElement('table');
table.style.border = "1px solid black";
table.style.borderCollapse = "collapse";

let tr = document.createElement('tr');
let td = document.createElement('td');

td.appendChild(sommaire);
tr.appendChild(td);
table.appendChild(tr);

let tableDiv = document.getElementById('table');

tableDiv.appendChild(table);

let affiche = true;

function swap(){
	if(affiche){
		tableDiv.style.display = "none";
		affiche = false;
		but.innerHTML = "afficher";
	}
	else {
		tableDiv.style.display = "block";
		affiche = true;
		but.innerHTML = "masquer";
	}
};


let but = document.createElement("button");
let text = document.createTextNode("masquer");
but.appendChild(text);
let butDiv = document.getElementById('button');
butDiv.appendChild(but);
but.addEventListener("mouseover", swap);

let lesDivh1contenu = document.querySelectorAll("div#contenu h1");
lesDivh1contenu.forEach(function (e) { e.style.backgroundColor = "red";});


