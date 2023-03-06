import axios from 'axios';
import Swal from 'sweetalert2'

export default function Form(props) {
  if (props.id.user != '') {
    var nombre = '';
    var apellido = '';
    var email = '';
    var telefono = '';
    axios.get(`https://daw202.medacarena.es/api/auth/infoUserLogeado?id=${props.id.user}`).then((response) => {
      nombre = response.data[0].name;
      apellido = response.data[0].apellido;
      email = response.data[0].email;
      telefono = response.data[0].telefono;

    }).then(() => {
      Swal.fire({
        title: 'Formulario de Reserva',
        html: `<input type="text" class="form-control" placeholder="Nombre" minLength='3' maxLength='23' id='nombre' value=${nombre} readonly ><br>
        <input type="text" class="form-control" placeholder="Apellido" minLength='3' maxLength='23' id='apellido' value=${apellido} readonly><br><input type="email" class="form-control" placeholder="Email" id='email' value=${email} readonly ><br>
        <input type="number" class="form-control" placeholder="Teléfono" id='telefono' value=${telefono} readonly><br>
        <input type="text" class="form-control" placeholder="País" id='pais' > <br>
        <input type="date" class="form-control" placeholder="Fecha de Nacimiento" id='nacimiento' ><br>
        <input type="text" class="form-control" placeholder="Tarjeta de Credito" id='credito' ><br>
        <input type="number" class="form-control" placeholder="Cvv" minLength='3' maxLength='3' id='cvv' ><br>
        <input type="text" class="form-control" placeholder="Menu" id='menu' ><br>
        <input type="number" class="form-control" placeholder="Comensales" min='1' max='4' id='comensales' >
        `,
        confirmButtonText: 'Reservar',
        focusConfirm: false,

        preConfirm: () => {
          let nombre = Swal.getPopup().querySelector('#nombre').value;
          let apellido = Swal.getPopup().querySelector('#apellido').value;
          let email = Swal.getPopup().querySelector('#email').value;
          let telefono = Swal.getPopup().querySelector('#telefono').value;
          let pais = Swal.getPopup().querySelector('#pais').value;
          let nacimiento = Swal.getPopup().querySelector('#nacimiento').value;
          let credito = Swal.getPopup().querySelector('#credito').value;
          let cvv = Swal.getPopup().querySelector('#cvv').value;
          let menu = Swal.getPopup().querySelector('#menu').value;
          let comensales = Swal.getPopup().querySelector('#comensales').value;
          axios.get(`https://daw202.medacarena.es/api/auth/reservarLogeado?usuario=${props.id.user}&id=${props.id.hora}&nombre=${nombre}&apellido=${apellido}&email=${email}&telefono=${telefono}&pais=${pais}&nacimiento=${nacimiento}&credito=${credito}&cvv=${cvv}&menu=${menu}&comensales=${comensales}`).then((response) => {
  
          Swal.fire({
              position: 'center',
              icon: 'success',
              title: 'Reserva realizada con exito',
              showConfirmButton: false,
              timer: 1500
            })
          }).catch((error) => {
            alert(error);
          })
        }
      })
    })
  }
  else {
    Swal.fire({
      title: 'Formulario de Reserva',
      html: `<input type="text" class="form-control" placeholder="Nombre" minLength='3' maxLength='23' id='nombre' ><br>
      <input type="text" class="form-control" placeholder="Apellido" minLength='3' maxLength='23' id='apellido' ><br><input type="email" class="form-control" placeholder="Email" id='email' ><br>
      <input type="number" class="form-control" placeholder="Teléfono" id='telefono' ><br>
      <input type="text" class="form-control" placeholder="País" id='pais' > <br>
      <input type="date" class="form-control" placeholder="Fecha de Nacimiento" id='nacimiento' ><br>
      <input type="text" class="form-control" placeholder="Tarjeta de Credito" id='credito' ><br>
      <input type="number" class="form-control" placeholder="Cvv" minLength='3' maxLength='3' id='cvv' ><br>
      <input type="text" class="form-control" placeholder="Menu" id='menu' ><br>
      <input type="number" class="form-control" placeholder="Comensales" min='1' max='4' id='comensales' >
      `,
      confirmButtonText: 'Reservar',
      focusConfirm: false,

      preConfirm: () => {
        let nombre = Swal.getPopup().querySelector('#nombre').value;
        let apellido = Swal.getPopup().querySelector('#apellido').value;
        let email = Swal.getPopup().querySelector('#email').value;
        let telefono = Swal.getPopup().querySelector('#telefono').value;
        let pais = Swal.getPopup().querySelector('#pais').value;
        let nacimiento = Swal.getPopup().querySelector('#nacimiento').value;
        let credito = Swal.getPopup().querySelector('#credito').value;
        let cvv = Swal.getPopup().querySelector('#cvv').value;
        let menu = Swal.getPopup().querySelector('#menu').value;
        let comensales = Swal.getPopup().querySelector('#comensales').value;
        axios.get(`https://daw202.medacarena.es/api/auth/reservar?id=${props.id.hora}&nombre=${nombre}&apellido=${apellido}&email=${email}&telefono=${telefono}&pais=${pais}&nacimiento=${nacimiento}&credito=${credito}&cvv=${cvv}&menu=${menu}&comensales=${comensales}`).then((response) => {
      
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Reserva realizada con exito',
            showConfirmButton: false,
            timer: 1500
          })
        }
        )
      }
    }).then((result) => {
      window.location.href = '/reservar';
    })

  }

}

