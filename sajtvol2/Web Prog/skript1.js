function Slika() {
  let naziv;
  const s = Slika.arguments;
  let src;
  let autor;
  let opis;
  let datum;
  let brl;

  let roditelj;

  this.Render = function (id) {
    this.roditelj = id;

    const glavni = document.createElement('div');
    glavni.style.width = '100%';
    glavni.style.height = '30%';// th-ht
    glavni.style.cssFloat = 'left';

    const levo = document.createElement('div');
    levo.style.width = '50%';
    levo.style.height = '66%';
    levo.style.cssFloat = 'left';


    const naz = document.createElement('span');
    naz.style.width = '100%';
    naz.style.height = '25%';
    naz.innerHTML = `Naziv:${this.naziv}`;
    levo.appendChild(naz);

    const aut = document.createElement('span');
    aut.style.width = '100%';
    aut.style.height = '25%';
    aut.innerHTML = `Naziv:${this.autor}`;
    levo.appendChild(aut);

    const lajk = document.createElement('input');
    lajk.style.width = '100%';
    lajk.style.height = '25%';
    lajk.setAttribute('type', 'button');
    lajk.setAttribute('value', `<LIKE ${this.brl}>`);
    lajk.onclick = this.povecajLajk;
    levo.appendChild(lajk);

    const dat = document.createElement('span');
    dat.style.width = '100%';
    dat.style.height = '25%';
    dat.innerHTML = `Datum:${this.datum}`;
    levo.appendChild(dat);

    const mestoSlika = document.createElement('div');
    mestoSlika.style.width = '50%';
    mestoSlika.style.height = '66%';
    mestoSlika.style.cssFloat = 'left;';
    const slika = document.createElement('img');
    slika.setAttribute('src', this.src);
    slika.setAttribute('width', '90%');
    slika.setAttribute('height', '85%');
    mestoSlika.appendChild(slika);

    const ops = document.createElement('span');
    ops.style.width = '100%';
    ops.style.height = '34%';
    ops.innerHTML = `Opis:${this.opis}`;
    glavni.appendChild(levi);
    glavni.appendChild(mestoSlika);
    glavni.appendChild(ops);

    document.getElementById(this.roditelj).appendChild(glavni);
  };

  this.Konstruktor = function () {
    this.naziv = s[0];
    this.src = s[1];
    this.autor = s[2];
    this.opis = s[3];
    this.datum = s[4];
  };

  this.povecajLajk = function (event) {
    brl += 1;
  };
  this.Konstruktor();
}
