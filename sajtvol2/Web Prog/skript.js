function Slika() 
{
var naziv;
var s = Slika.arguments;
var src;
var autor;
var opis;
var datum;
var slika;
var brl;
var roditelj;
var klikovi = 0;
 
this.Render = function(id)
{
this.roditelj = id;
 
var glavni = document.createElement("div");
glavni.style.width="100%";
glavni.style.height="50%";// th-ht
glavni.style.cssFloat="left";
 
var levo = document.createElement("div");
levo.style.width="50%";
levo.style.height="100%";
levo.style.lineHeight="200%";
levo.style.cssFloat="left";
 
 
var naz = document.createElement("span");
naz.style.width="100%";
naz.style.height="25%";
naz.innerHTML = "Naziv:" + this.naziv;
levo.appendChild(naz);
levo.appendChild(document.createElement("br"));
 
var aut = document.createElement("span");
aut.style.width="100%";
aut.style.height="25%";
aut.innerHTML = "Naziv:" + this.autor;
levo.appendChild(aut);
levo.appendChild(document.createElement("br"));

var mestoDugme = document.createElement("div");
mestoDugme.style.width="100%";
mestoDugme.style.height="25%";

var lajk = document.createElement("input");
lajk.setAttribute("type","button");

lajk.setAttribute("value","LIKE" + "+" + "!"); // " + this.brl + "
lajk.onclick=this.Klikic;
var broj = document.createElement("p");
broj.id="klik";
broj.innerHTML = klikovi;


mestoDugme.appendChild(lajk);
mestoDugme.appendChild(broj);
levo.appendChild(mestoDugme);
levo.appendChild(document.createElement("br"));
 
var dat = document.createElement("span");
dat.style.width="100%";
dat.style.height="25%";
dat.innerHTML ="Datum:" + this.datum;
levo.appendChild(dat);
levo.appendChild(document.createElement("br"));
glavni.appendChild(levo);


var mestoSlika = document.createElement("div");
mestoSlika.style.width="50%";
mestoSlika.style.height="100%";
mestoSlika.style.cssFloat="left";

glavni.appendChild(mestoSlika);

    slika = document.createElement("img");
    slika.setAttribute("src",this.src);
    slika.setAttribute("width","100%");
    slika.setAttribute("height","20%");
mestoSlika.appendChild(slika);  
 
var ops = document.createElement("span");
ops.style.width="100%";
ops.style.height="34%";
ops.innerHTML ="Opis:" + this.opis;
 //levi u levo 

//glavni.appendChild(ops);

document.getElementById(this.roditelj).appendChild(glavni); 

}
this.Klikic = function() 
{
	klikovi = klikovi+1;
	document.getElementById("klik").innerHTML= klikovi;
	mestoDugme.appendChild(broj);
}
 
this.Konstruktor = function()
{
this.naziv=s[0];
this.src= s[1];
this.autor=s[2];
this.opis=s[3];
this.datum=s[4];
this.brl=s[5];

}
 
this.Konstruktor();
}