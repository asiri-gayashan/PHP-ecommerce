



// const myModal = document.getElementById('myModal');
// const myInput = document.getElementById('myInput');

// myModal.addEventListener('shown.bs.modal', () => {
// 	myInput.focus()
// });


// var bm;
// function signIn() {
// 	var m = document.getElementById("signInModal");
// 	bm = new bootstrap.Modal(m);
// 	bm.show();
// }



function adminlogin() {

	var username = document.getElementById("un");
	var password = document.getElementById("ps");

	var f = new FormData();
	f.append("u", username.value);
	f.append("p", password.value);

	var r = new XMLHttpRequest();

	r.onreadystatechange = function () {
		if (r.readyState == 4) {
			var t = r.responseText;
			if (t == 5055) {
				window.location = "admin.php";
			} else {
				document.getElementById("alrt").classList = "d-flex";
			}
		}
	};

	r.open("POST", "adminLoginProcess.php", true);
	r.send(f);



}



function changeView() {
	var signin = document.getElementById("signin");
	var signup = document.getElementById("signup");

	signin.classList.toggle("d-none");
	signup.classList.toggle("d-none");
}


function register() {
	var fname = document.getElementById("fname");
	var lname = document.getElementById("lname");
	var email = document.getElementById("email");
	var pass = document.getElementById("pass");

	var f = new FormData();
	f.append("fname", fname.value);
	f.append("lname", lname.value);
	f.append("email", email.value);
	f.append("pass", pass.value);

	var r = new XMLHttpRequest();


	r.onreadystatechange = function () {

		if (r.readyState == 4) {
			var t = r.responseText;

			if (t == 5055) {
				alert("You have sign up succesfuly")
				changeView();
			} else {
				document.getElementById("altDiv").className = "col-12 d-flex";
				document.getElementById("alert").innerHTML = t;
			}
		}

	};



	r.open("POST", "signupProcess.php", true);
	r.send(f);



}




function userSiginIn() {

	var email = document.getElementById("e").value;
	var pass = document.getElementById("p").value;


	var f = new FormData();
	f.append("e", email);
	f.append("p", pass);

	var r = new XMLHttpRequest();
	r.onreadystatechange = function () {
		if (r.readyState == 4) {
			var t = r.responseText;
			if (t == 5055) {
				window.location = "userprofile.php";
			} else {
				document.getElementById("alrtDiv").className = "col-12 d-flex";
			}
		}
	};

	r.open("POST", "usersignIn.php", true);
	r.send(f);



}





var langId = [];


function defAlerts(t) {
	document.getElementById("altDiv").classList = "d-flex";
	document.getElementById("alert").innerHTML = t;

}



function addProduct() {

	var title = document.getElementById("ti").value;
	var Autor = document.getElementById("au").value;
	var isb13 = document.getElementById("i13").value;
	var i10 = document.getElementById("i10").value;
	var yea = document.getElementById("yea").value;
	var con = document.getElementById("con").value;
	var dec = document.getElementById("dec").value;
	var cat = document.getElementById("cat").value;
	var scat = document.getElementById("scat").value;
	var stpr = document.getElementById("stpr").value;
	var bnpr = document.getElementById("bnpr").value;
	var qty = document.getElementById("qty").value;
	var tax = document.getElementById("tax").value;
	var shiptype = document.getElementById("shiptype").value;
	var shipcost = document.getElementById("shipcost").value;
	var pub = document.getElementById("pub").value;
	var lang = document.getElementById("lang").value;

	var weight = document.getElementById("weight").value;
	var pkgtyp = document.getElementById("pkgtyp").value;


	var f = new FormData();

	f.append("title", title);
	f.append("Autor", Autor);
	f.append("isb13", isb13);
	f.append("i10", i10);
	f.append("yea", yea);
	f.append("con", con);
	f.append("dec", dec);
	f.append("cat", cat);
	f.append("scat", scat);
	f.append("stpr", stpr);
	f.append("bnpr", bnpr);
	f.append("qty", qty);
	f.append("tax", tax);
	f.append("shiptype", shiptype);
	f.append("shipcost", shipcost);
	f.append("pub", pub);
	f.append("lang", lang);

	f.append("weight", weight);
	f.append("pkgtyp", pkgtyp);


	var r = new XMLHttpRequest();

	r.onreadystatechange = function () {
		if (r.readyState == 4) {
			var t = r.responseText;
			defAlerts(t);


			if (t == 5055) {
				location.reload();

			}
		}
	};

	r.open("POST", "addproductProcess.php", true);
	r.send(f);


}




function addLang() {

	var lang = document.getElementById("lang");
	var langname = lang.options[lang.selectedIndex].text;
	var langdiv = document.getElementById("langdiv");

	if (lang.value == 0) {
		// alert("Please select a language");
	} else {


		var f = new FormData();
		f.append("langname", langname);
		f.append("langid", lang.value);

		var r = new XMLHttpRequest();
		r.onreadystatechange = function () {
			if (r.readyState == 4) {
				var t = r.responseText;
				langdiv.innerHTML = langdiv.innerHTML + t;


				document.getElementById("ola" + lang.value).disabled = true;
				langId["ola" + lang.value] = lang.value;

				// alert(langId["ola" + lang.value]);
				lang.selectedIndex = 0;
			}
		};

		r.open("POST", "langset.php", true);
		r.send(f);

	}

}


function removeLang(id) {

	document.getElementById(id).remove();
	var langIndex = "o" + id;

	langId.splice(0, 1);
	document.getElementById(langIndex).disabled = false;

}



function priId() {

	// alert(langId["ola1"]);
	// alert(langId["ola2"]);
	// alert(langId["ola3"]);
	// alert(langId.length);

}


function changeStype() {

	var shiptype = document.getElementById("shiptype").value;

	if (shiptype == 1) {
		document.getElementById("shipcost").disabled = true;
	} else {
		document.getElementById("shipcost").disabled = false;
	}

}


function qtyChange(change, prq) {

	var qty = document.getElementById("qty");
	var qtyvalue = parseInt(qty.value);




	if (change == "up") {


		if (prq <= qtyvalue) {
			qty.value = prq;

		} else {
			qty.value = qtyvalue + 1;
		}


	} else {


		if (qtyvalue <= 1) {
			qty.value = 1;
		} else {
			qty.value = qtyvalue - 1;
		}


	}

}


function addwishlist(id, email) {

	var f = new FormData();
	f.append("id", id);
	f.append("email", email);

	var r = new XMLHttpRequest();
	r.onreadystatechange = function () {

		if (r.readyState == 4) {



			var t = r.responseText;

			alert(t);
			location.reload();


		}

	};

	r.open("POST", "addWishList.php", true);
	r.send(f);



}






function addToCart(id, email) {

	var pid = id;
	var uemail = email;
	var qty = document.getElementById("qty");


	var f = new FormData();
	f.append("pid", pid);
	f.append("uemail", uemail);
	f.append("qty", qty.value);


	var r = new XMLHttpRequest();
	r.onreadystatechange = function () {

		if (r.readyState == 4) {
			alert(r.responseText);
		}

	};

	r.open("POST", "addtocartProcess.php", true);
	r.send(f);


}



var strRate = 0;

function addComment(id) {

	var pid = id;

	var email = document.getElementById("commEmail");
	var comment = document.getElementById("comText");


	var f = new FormData();
	f.append("pid", pid);
	f.append("email", email.value);
	f.append("comment", comment.value);
	f.append("strRate", strRate);


	var r = new XMLHttpRequest();
	r.onreadystatechange = function () {
		if (r.readyState == 4) {
			alert(r.responseText);

		}
	};


	r.open("POST", "addComment.php", true);
	r.send(f);



}



function addRatings(id) {
	var bid = id;
	for (let i = 1; i <= 5; i++) {
		document.getElementById("r" + i).className = "bi bi-star me-1  fs-5 l-ratings";

	}
	for (let i = 1; i <= bid; i++) {
		document.getElementById("r" + i).className = "bi bi-star-fill me-1  fs-5 l-ratings";
		strRate = i;
	}



}



function searchProcess() {

	var srctxt = document.getElementById("searchTxt").value;
	// alert(srctxt);

	var r = new XMLHttpRequest();
	r.onreadystatechange = function () {
		if (r.readyState == 4) {

			document.getElementById("rsltbx").innerHTML = r.responseText;

			// alert(r.responseText);
		}
	};

	r.open("GET", "searchProcess.php?search=" + srctxt, true);
	r.send();



}


function searchRedirect() {

	var url = window.location.pathname;
	var searctxt = document.getElementById("searchTxt");

	if (url == "/newtech/search.php") {

		searchProcess();

	} else {

		window.location = "search.php?search=" + searctxt.value;
	}

}




function updateCart(qary) {
	var qtyArray = qary;
	var cartDetails = [

	]

	for (let i = 0; i < qtyArray.length; i++) {
		var qty = document.getElementById("qty" + qtyArray[i]).value;
		cartDetails.push({ "cartID": qtyArray[i], "qty": qty });
	}

	var f = new FormData();
	f.append("cartDetails", JSON.stringify(cartDetails));


	var r = new XMLHttpRequest();
	r.onreadystatechange = function () {

		if (r.readyState == 4) {

			location.reload();
		}

	};

	r.open("POST", "updatecart.php", true);
	r.send(f);

}



function deleteCart(id) {


	var f = new FormData();
	f.append("id", id);

	var r = new XMLHttpRequest();
	r.onreadystatechange = function () {
		if (r.readyState == 4) {
			location.reload();
		}
	};

	r.open("POST", "deleteCart.php", true);
	r.send(f);


}


function applyFiters(x) {

	var fltOBJ = x;
	// alert("Ammo Eka");
	// alert(JSON.stringify(x));


	var fromPrice = document.getElementById("prfromweb").value;
	var toPrice = document.getElementById("prtoweb").value;
	var searctxt = document.getElementById("searchTxt").value;
	var catArr = [];
	var langArr = [];
	var shipArr = [];
	var conArr = [];


	// alert(fromPrice);
	// alert(toPrice);




	for (let i = 0; i < fltOBJ.cat.length; i++) {

		var catid = "cat" + fltOBJ.cat[i];
		var catStatus = document.getElementById(catid).checked;
		if (catStatus == true) {
			catArr.push(fltOBJ.cat[i]);
		}
	}



	for (let i = 0; i < fltOBJ.lang.length; i++) {

		var langid = "lang" + fltOBJ.lang[i];
		var langStatus = document.getElementById(langid).checked;
		if (langStatus == true) {
			langArr.push(fltOBJ.lang[i]);
		}
	}



	for (let i = 0; i < fltOBJ.ship.length; i++) {

		var shipid = "ship" + fltOBJ.ship[i];
		var shipStatus = document.getElementById(shipid).checked;
		if (shipStatus == true) {
			shipArr.push(fltOBJ.ship[i]);
		}
	}


	for (let i = 0; i < fltOBJ.con.length; i++) {

		var conid = "con" + fltOBJ.con[i];
		var conStatus = document.getElementById(conid).checked;
		if (conStatus == true) {
			conArr.push(fltOBJ.con[i]);
		}
	}






	// alert(catArr);
	// alert(langArr);
	// alert(shipArr);
	// alert(conArr);

	// alert(JSON.stringify(catArr));
	// alert(JSON.stringify(langArr));
	// alert(JSON.stringify(shipArr));
	// alert(JSON.stringify(conArr));


	var filterData = {
		"searctxt":searctxt,
		"fromPrice": fromPrice,
		"toPrice": toPrice,
		"cat": catArr,
		"lang": langArr,
		"ship": shipArr,
		"con": conArr
	}

	// alert(JSON.stringify(filterData));


	var f = new FormData();
	f.append("d", JSON.stringify(filterData));

	var r = new XMLHttpRequest();

	r.onreadystatechange = function () {
		if (r.readyState == 4) {
			document.getElementById("rsltbx").innerHTML = r.responseText;
		}
	};

	r.open("POST", "searchFilters.php", true);
	r.send(f);

}














