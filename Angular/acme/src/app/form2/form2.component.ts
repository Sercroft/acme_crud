import { Component, OnInit } from '@angular/core';
import { Conductor } from '../Interfaces/conductor';
import { ConductorService } from '../services/conductor.service';

@Component({
  selector: 'app-form2',
  templateUrl: './form2.component.html',
  styleUrls: ['./form2.component.css']
})
export class Form2Component implements OnInit {

  conductor: Conductor = {
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
  constructor(private conductorService: ConductorService) { }

  ngOnInit(): void {
  }

  guardarForm2(){
    this.conductorService.guardar(this.conductor).subscribe((data:any) => {
      alert('Conductor guardado.');
    }, (error) => {
      console.log('Error');
      alert('Ocurrió un error.')
    });
  }

}
