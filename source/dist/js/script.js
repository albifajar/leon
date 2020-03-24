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
  timer: 3000
});
}
function errorProsess(msg){
  Swal.fire({
  icon: 'error',
  title: 'Gagal',
  text: msg,
  showConfirmButton: false,
  timer: 3000
});
}
function alertToast(status, title){
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 7000,
  timerProgressBar: true,
  onOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
});

Toast.fire({
  icon: status,
  title: title
})
}