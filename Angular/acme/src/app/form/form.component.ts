import { Component, OnInit } from '@angular/core';
import { Propietario } from '../Interfaces/propietario';
import { PropietarioService } from '../services/propietario.service';

@Component({
  selector: 'app-form',
  templateUrl: './form.component.html',
  styleUrls: ['./form.component.css']
})
export class FormComponent implements OnInit {
  propietario: Propietario = {
    cedula: '',
    primer_nombre: '',
    segundo_nombre: '',
    apellidos: '',
    direccion: '',
    telefono: '',
    ciudad: '',
    created_at: '',
    updated_at: ''
  };

  constructor(private propietarioService: PropietarioService){ 
  }

  ngOnInit(): void {
  }

  guardarForm(){
    this.propietarioService.guardar(this.propietario).subscribe((data:any) => {
      alert('Propietario guardado.');
    }, (error) => {
      console.log('Error');
      alert('Ocurrió un error.')
    });
  }

}
