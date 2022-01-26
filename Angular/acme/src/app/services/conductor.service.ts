import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Conductor } from '../Interfaces/conductor';

@Injectable({
  providedIn: 'root'
})
export class ConductorService {

  api_endpoint = 'http://127.0.0.1:8000/api/' 
  constructor(private httpClient:HttpClient) { }

  obtener(){
    return this.httpClient.get(this.api_endpoint + 'conductor');
  }

  guardar(conductor:Conductor){
    const headers = new HttpHeaders({'Content-Type':'application/json'});
    return this.httpClient.post(this.api_endpoint+'conductor', conductor, {headers: headers});
  }
}
