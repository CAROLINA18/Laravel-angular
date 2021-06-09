import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { ClientesService } from '../services/clientes.service';
import { Cliente } from '../interfaces/cliente';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {
  API_POINT= 'http://localhost:8000/api';
  clientess: Cliente[];
  filterclient='';
  constructor(private ClienteService : ClientesService, private httpClient:HttpClient) { 
    httpClient.get(this.API_POINT + '/cliente').subscribe( (data: Cliente[]) => {
      this.clientess = data;
      console.log(this.clientess);
    }
    );
  }

  ngOnInit(): void {
  }

}
