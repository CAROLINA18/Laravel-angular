import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'filter'
})
export class FilterPipe implements PipeTransform {

  transform(value: any, arg: any): any {
    const resultClient = [];
    for(const Cliente of value){
      if(Cliente.nombre.indexOf(arg) > -1 || Cliente.consecutivo.indexOf(arg) > -1 || Cliente.nit.indexOf(arg) > -1 || Cliente["cpr_detalle_ficha"].categoria.indexOf(arg) > -1){
        resultClient.push(Cliente);
      };
      
    };
    return resultClient;
  }

}
