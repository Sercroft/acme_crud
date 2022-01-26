import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Propietario } from '../Interfaces/propietario';

@Injectable({
  providedIn: 'root'
})
export class PropietarioService {
  api_endpoint = 'http://127.0.0.1:8000/api/';
  constructor(private httpClient:HttpClient) {}

  obtener(){
    return this.httpClient.get(this.api_endpoint + 'propietario');
  }

  guardar(propietario:Propietario){
    const headers = new HttpHeaders({'Content-Type':'application/json'});
    return this.httpClient.post(this.api_endpoint+'propietario', propietario, {headers: headers});
  }
}
