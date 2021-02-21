// vanilla javascript
/*let xhr = new XMLHttpRequest();
xhr.onreadystatechange = function() {
	if (xhr.readyState == 4 && xhr.status == 200) {
		let mahasiswa = JSON.parse(this.responseText);
		console.log(mahasiswa)
	}
}
xhr.open('GET', '../mahasiswa.json', true);
xhr.send();*/

// jQuery
$.getJSON('../mahasiswa.json', function(data) {
	console.log(data);
});
