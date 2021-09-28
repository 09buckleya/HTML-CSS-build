(function () {
  var onem;
  var fivem;
  var tenm;
  var fifthteenm;
  var thirtym;
  var oneh;
  var threeh;
  var eighth;
  var fifthteenh;
  var twentyfourh;
  var threed;
  var sevend;
  var totalSpeeds;

  var trainingForm = document.getElementById("trainingForm");
  var buildingForm = document.getElementById("buildingForm");
  var researchForm = document.getElementById("researchForm");
  var healingForm = document.getElementById("healingForm");
  var universalsForm = document.getElementById("universalsForm");

  var tResults = document.getElementById("tresults");
  var bResults = document.getElementById("bresults");
  var rResults = document.getElementById("rresults");
  var hResults = document.getElementById("hresults");
  var uResults = document.getElementById("uresults");

  trainingForm.addEventListener("submit", function (ev) {
    ev.preventDefault();
    onem = parseInt(document.getElementById("1mtSpeeds").value);
    fivem = parseInt(document.getElementById("5mtSpeeds").value * 5);
    tenm = parseInt(document.getElementById("10mtSpeeds").value * 10);
    fifthteenm = parseInt(document.getElementById("15mtSpeeds").value * 15);
    thirtym = parseInt(document.getElementById("30mtSpeeds").value * 30);
    oneh = parseInt(document.getElementById("60mtSpeeds").value * 60);
    threeh = parseInt(document.getElementById("3htSpeeds").value * 180);
    eighth = parseInt(document.getElementById("8htSpeeds").value * 480);
    fifthteenh = parseInt(document.getElementById("15htSpeeds").value * 900);
    twentyfourh = parseInt(document.getElementById("24htSpeeds").value * 1440);

    totalSpeeds =
      onem +
      fivem +
      tenm +
      fifthteenm +
      thirtym +
      oneh +
      threeh +
      eighth +
      fifthteenh +
      twentyfourh;
    tResults.innerHTML = "Training Speeds: " + totalSpeeds + " minutes";
  });

  buildingForm.addEventListener("submit", function (ev) {
    ev.preventDefault();
    onem = parseInt(document.getElementById("1mbSpeeds").value);
    fivem = parseInt(document.getElementById("5mbSpeeds").value * 5);
    tenm = parseInt(document.getElementById("10mbSpeeds").value * 10);
    fifthteenm = parseInt(document.getElementById("15mbSpeeds").value * 15);
    thirtym = parseInt(document.getElementById("30mbSpeeds").value * 30);
    oneh = parseInt(document.getElementById("60mbSpeeds").value * 60);
    threeh = parseInt(document.getElementById("3hbSpeeds").value * 180);
    eighth = parseInt(document.getElementById("8hbSpeeds").value * 480);
    fifthteenh = parseInt(document.getElementById("15hbSpeeds").value * 900);
    twentyfourh = parseInt(document.getElementById("24hbSpeeds").value * 1440);

    totalSpeeds =
      onem +
      fivem +
      tenm +
      fifthteenm +
      thirtym +
      oneh +
      threeh +
      eighth +
      fifthteenh +
      twentyfourh;
    bResults.innerHTML = "Building Speeds: " + totalSpeeds + " minutes";
  });

  researchForm.addEventListener("submit", function (ev) {
    ev.preventDefault();
    onem = parseInt(document.getElementById("1mrSpeeds").value);
    fivem = parseInt(document.getElementById("5mrSpeeds").value * 5);
    tenm = parseInt(document.getElementById("10mrSpeeds").value * 10);
    fifthteenm = parseInt(document.getElementById("15mrSpeeds").value * 15);
    thirtym = parseInt(document.getElementById("30mrSpeeds").value * 30);
    oneh = parseInt(document.getElementById("60mrSpeeds").value * 60);
    threeh = parseInt(document.getElementById("3hrSpeeds").value * 180);
    eighth = parseInt(document.getElementById("8hrSpeeds").value * 480);
    fifthteenh = parseInt(document.getElementById("15hrSpeeds").value * 900);
    twentyfourh = parseInt(document.getElementById("24hrSpeeds").value * 1440);

    totalSpeeds =
      onem +
      fivem +
      tenm +
      fifthteenm +
      thirtym +
      oneh +
      threeh +
      eighth +
      fifthteenh +
      twentyfourh;
    rResults.innerHTML = "Research Speeds: " + totalSpeeds + " minutes";
  });

  healingForm.addEventListener("submit", function (ev) {
    ev.preventDefault();
    onem = parseInt(document.getElementById("1mhSpeeds").value);
    fivem = parseInt(document.getElementById("5mhSpeeds").value * 5);
    tenm = parseInt(document.getElementById("10mhSpeeds").value * 10);
    fifthteenm = parseInt(document.getElementById("15mhSpeeds").value * 15);
    thirtym = parseInt(document.getElementById("30mhSpeeds").value * 30);
    oneh = parseInt(document.getElementById("60mhSpeeds").value * 60);
    threeh = parseInt(document.getElementById("3hhSpeeds").value * 180);
    eighth = parseInt(document.getElementById("8hhSpeeds").value * 480);
    fifthteenh = parseInt(document.getElementById("15hhSpeeds").value * 900);
    twentyfourh = parseInt(document.getElementById("24hhSpeeds").value * 1440);

    totalSpeeds =
      onem +
      fivem +
      tenm +
      fifthteenm +
      thirtym +
      oneh +
      threeh +
      eighth +
      fifthteenh +
      twentyfourh;
    hResults.innerHTML = "Healing Speeds: " + totalSpeeds + " minutes";
  });

  universalsForm.addEventListener("submit", function (ev) {
    ev.preventDefault();
    onem = parseInt(document.getElementById("1muSpeeds").value);
    fivem = parseInt(document.getElementById("5muSpeeds").value * 5);
    tenm = parseInt(document.getElementById("10muSpeeds").value * 10);
    fifthteenm = parseInt(document.getElementById("15muSpeeds").value * 15);
    thirtym = parseInt(document.getElementById("30muSpeeds").value * 30);
    oneh = parseInt(document.getElementById("60muSpeeds").value * 60);
    threeh = parseInt(document.getElementById("3huSpeeds").value * 180);
    eighth = parseInt(document.getElementById("8huSpeeds").value * 480);
    fifthteenh = parseInt(document.getElementById("15huSpeeds").value * 900);
    twentyfourh = parseInt(document.getElementById("24huSpeeds").value * 1440);
    threed = parseInt(document.getElementById("3duSpeeds").value * 4320);
    sevend = parseInt(document.getElementById("7duSpeeds").value * 10080);

    totalSpeeds =
      onem +
      fivem +
      tenm +
      fifthteenm +
      thirtym +
      oneh +
      threeh +
      eighth +
      fifthteenh +
      twentyfourh +
      threed +
      sevend;
    uResults.innerHTML = "Universal Speeds: " + totalSpeeds + " minutes";
  });
})();
