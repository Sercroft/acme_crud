import { Component, OnInit } from '@angular/core';
import { Conductor } from '../Interfaces/conductor';
import { Propietario } from '../Interfaces/propietario';
import { Vehiculo } from '../Interfaces/vehiculo';
import { ConductorService } from '../services/conductor.service';
import { PropietarioService } from '../services/propietario.service';
import { VehiculoService } from '../services/vehiculo.service';

@Component({
  selector: 'app-form3',
  templateUrl: './form3.component.html',
  styleUrls: ['./form3.component.css']
})
export class Form3Component implements OnInit {

  api_endpoint = 'http://127.0.0.1:8000/api/';

  
  vehiculo: Vehiculo = {
    placa: '',
    color: '',
    marca: '',
    tipo_vehiculo:'',
    conductor_id: 1,
    propietario_id: 2,
    created_at: '',
    updated_at: ''
  };

  propietarios: Propietario[] = [];
  conductores: Conductor[] = [];

  constructor(private vehiculoService: VehiculoService, private propietarioService: PropietarioService, private conductorService: ConductorService) {
    
    this.vehiculoService.obtener().subscribe((data: any) => {
      this.propietarioService.obtener() .subscribe((data: any) => {
        this.propietarios = data;
      }, 
      (error) => {
        alert('Ocurrió un error')
      });

      this.conductorService.obtener() .subscribe((data: any) => {
        this.conductores = data;
      }, 
      (error) => {
        alert('Ocurrió un error')
      });
    }, 
    (error) => {
      alert('Ocurrió un error')
    });
   }

  ngOnInit(): void {
  }

  guardarForm3(){
    this.vehiculoService.guardar(this.vehiculo).subscribe((data:any) => {
      alert('Vehículo guardado.');
    }, (error) => {
      console.log('Error');
      alert('Ocurrió un error.')
    });
  }

}
