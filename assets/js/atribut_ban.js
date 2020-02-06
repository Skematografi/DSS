
			function awal(){
				Interval = setInterval("hitung()",1);
			}

			function hitung(){
				a =parseInt(document.getElementById("harga").value);
				b =parseInt(document.getElementById("ukuran").value);
				c =parseInt(document.getElementById("type").value);
				d =parseInt(document.getElementById("motif").value);
				total = (a + b + c + d);
				document.getElementById("total").value=total;

			}

	$(function () {
        $('#total').onkeyup(function () {
            if ($(this).val() != 100 ) {
                $('.lanjut').prop('disabled', true);
            } else {
                $('.lanjut').prop('disabled', false);
            }
        });
    });



			function berhenti(){
				clearInteval(Interval);
			}


   