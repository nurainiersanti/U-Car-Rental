<script type="text/javascript">
$(document).ready (function() {
 $('#formContoh').formValidation({
 framework: 'bootstrap',
 excluded: 'disabled',
 icon: {
 valid: 'glyphicon glyphicon-ok',
 invalid: 'glyphicon glyphicon-remove',
 validating: 'glyphicon glyphicon-refresh'
 },
 fields: {
 username: {
 validators: {
 notEmpty: {
 message: 'Username Tidak Boleh Kosong'
 }
 }
 },
 password: {
 validators: {
 notEmpty: {
 message: 'Password Tidak Boleh Kosong'
 },
 identical: {
 field: 'repassword',
 message: 'Samakan password dengan Confrim Password'
 } 
 }
 },
repassword: {
 validators: {
 notEmpty: {
 message: 'Confirm Password Tidak Sama'
 },
 identical: {
 field: 'password',
 message: 'Password Tidak sama'
 } 
 }
 },
 telepon: {
 validators: {
 notEmpty: {
 message: 'telepon Tidak Boleh Kosong'
 }
 }
 },
 emailUser: {
 validators: {
 notEmpty: {
 message: 'Email Tidak Boleh Kosong'
 },
 emailAddress: {
 message: 'Email Tidak Valid'
 }
 }
 },
 alamat: {
 validators: {
 notEmpty: {
 message: 'alamat Tidak Boleh Kosong'
 }
 }
 }
 }
 })
});
function checkNumber()
 {
 var validasiAngka = /^[0-9]+$/;
 var tahunLahir = document.getElementById("telepon");
 
 if (tahunLahir.value.match(validasiAngka)) {
 //alert("Tahun Lahir Kamu Adalah " + tahunLahir.value);
 } else {
 alert("Masukkan Format Wajib Angka!");
 tahunLahir.focus();
 return false;
 }
 }
function ValidateEmail(mail) 
{ 
 if (/mysite@ourearth.com/.test(emailUser)) 
 { 
 return (true) 
 } 
 alert("Masukkan e-Mail Dengan Benar") 
 return (false) 
}
</script>