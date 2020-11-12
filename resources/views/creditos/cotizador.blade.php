@extends('layouts.plantilla')
    @section('body')
        <h1 class="pag-title">Cotizador</h1>
        <div id="tabla" class="box-formulary" style="margin-top:25px; width:350px;height:250px;">
            <div class="form-row col-10">
                <label class="font-weight-bold" for="">Monto del Solicitado</label>
                <input type="number" class="form-control" v-model="monto">
            </div>
            <div class="form-row col-10">
                <label class="font-weight-bold" for="">Interes del Crédito</label>
                <input type="number" class="form-control" v-model="interes">
            </div>
            <div class="form-row col-10">
                <label class="font-weight-bold" for="">Plazo del Crédito</label>
                <input type="number" class="form-control" v-model="plazo">
            </div>

            <button @click="amortizacion" class="btn btn-success">Generar</button>
        </div>
        <div>
            <ul>
                <li v-for="tabla of tablas">{{tabla.monto}}</li>
                <li v-for="tabla of tablas">{{tabla.interes}}</li>
            </ul> 
        </div>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
        <script>
            const tabla = new Vue({
                el: '#tabla',
                data: {
                    monto: 0,
                    interes: 0,
                    plazo: 0,
                    iva; 0
                },
                computed:{
                    amortizacion(){
                        this.monto = this.monto / this.plazo;
                        this.interes = this.monto * this.interes;
                    }
                }
            })
        </script>
    @endsection