function Knjiga(n,i,g,a,iz,k,p)
{	
	this.naziv;
	this.ISBN;
	this.godina;
	this.autor;
	this.izdavac;
	this.kratakOpis;
	this.putanja;
	this.roditelj;
	
	this.Postavi = function()
	{
		this.naziv=n;
		this.ISBN=i;
		this.godina=g;
		this.autor=a;
		this.izdavac=iz;
		this.kratakOpis=k;
		this.putanja=p;
	}
	
	this.Prikaz = function(el)
	{
		this.roditelj=el;
		var glavni=document.createElement("div");
		glavni.style.width="50%";
		glavni.style.height="35%";
		glavni.style.borderBottom="1px solid black";
		glavni.style.backgroundColor="#E8E8E8 ";
		var levi=document.createElement("div");
		levi.style.width="50%";
		levi.style.height="100%";
		levi.style.cssFloat="left";
		
	
			var gornjiLevi=document.createElement("div");
			gornjiLevi.style.height="50%";
			gornjiLevi.style.paddingTop="1mm";
			gornjiLevi.style.width="100%";
				var slika=document.createElement("img");
				slika.setAttribute("src",this.putanja);
				slika.setAttribute("width", "40%");
				slika.setAttribute("height", "90%");
			gornjiLevi.appendChild(slika);
		levi.appendChild(gornjiLevi);
		
		var mestoISBN = document.createElement("p");
		mestoISBN.innerHTML="ISBN: "+this.ISBN;
		var mestoGOD = document.createElement("p");
		mestoGOD.innerHTML="Godina: "+this.godina;
		var mestoAUTOR = document.createElement("p");
		mestoAUTOR.innerHTML="Autor: "+this.autor;
		var mestoIZDAVAC = document.createElement("p");	
		mestoIZDAVAC.innerHTML="Izdavac: "+this.izdavac;
		levi.appendChild(mestoISBN);
		levi.appendChild(mestoGOD);
		levi.appendChild(mestoAUTOR);
		levi.appendChild(mestoIZDAVAC);
		
		var desni=document.createElement("div");
		desni.style.width="50%";
		desni.style.height="100%";
		desni.style.cssFloat="left";
		
		var mestoNaziv = document.createElement("p");
		mestoNaziv.innerHTML="Naziv: "+this.naziv;
		mestoNaziv.style.fontSize="12";
		
		var mestoKratakOpis = document.createElement("p");
		mestoKratakOpis.innerHTML="Kratak opis: "+this.kratakOpis;
		mestoKratakOpis.style.fontSize="12";

		desni.appendChild(mestoNaziv);
		desni.appendChild(mestoKratakOpis);

		glavni.appendChild(levi);
		glavni.appendChild(desni);
		
		var o=document.createElement("br");
		document.getElementById(this.roditelj).appendChild(o);
		document.getElementById(this.roditelj).appendChild(glavni);		
	}
	this.Postavi();
}


