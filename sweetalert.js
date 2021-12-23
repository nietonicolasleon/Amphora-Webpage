Swal.fire({
    title: 'Usted está apunto de ingresar a la página Web de Amphora',
    text: "Tengo la edad legal para beber en mi país.",
    icon: 'warning',
    color: '#ffd700',
    confirmButtonColor: '#daa520',
    confirmButtonText: 'CONFIRMAR',
    background: '#842833',
    backdrop: 'rgba(20,20,20,0.4)'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire({
        title: 'Recuerde beber con moderación',
        color: '#ffd700',
        confirmButtonColor: '#daa520',
        background: '#842833',
        backdrop: 'rgba(20,20,20,0.4)'
      })
    }
  })