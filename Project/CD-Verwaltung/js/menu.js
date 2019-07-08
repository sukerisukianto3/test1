"use strict";

var menus;

menus.push(new menu("Stammdaten",0,[new menu("Buch",0),new menu("Author",0),new menu("Verlag",0)]);
menus.push(new menu("Anzeigen",0,[new menu("Buch-List",0),new menu("Author-List",0),new menu("Verlag-List",0)]);

function menu (titel="Default",sort = 0, children=[]) {

	var titel,sort,children;

	this.titel = titel;
	this.sort = sort;
	this.children=children;

}

function displayAllMenus() {
	
}

function displayMenu() {
	
}