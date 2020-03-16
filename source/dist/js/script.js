function delConfirm(link){
  let result = Swal.fire({
  title: 'Apa kamu yakin?',
  text: "Ini akan menghapus semua data yang ada",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Ya',
  cancelButtonText: 'Batal',
}).then((result) => {
  if (result.value) {
  location.href = link;
  }else if (
    result.dismiss === Swal.DismissReason.cancel
  ) {
        return false;
    }
});
}
function successProsess(msg){
  Swal.fire({
  icon: 'success',
  title: 'Sukses',
  text: msg,
  showConfirmButton: false,
  timer: 1500
});
}