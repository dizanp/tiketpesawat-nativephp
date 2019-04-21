function Plus(){
	var txtFirstNumber = document.getElementById('harga').value;
      var txtSecondNumber = document.getElementById('jumlah').value;
      var txtFourthNumber = document.getElementById('bayi').value;
      var result = (parseInt(txtFirstNumber) * parseInt(txtSecondNumber)) +
      (parseInt(txtFirstNumber) * parseInt(txtFourthNumber)/2);
       console.log(result);
      if (!isNaN(result)) {
         document.getElementById('total_harga').value = result;
      }

}