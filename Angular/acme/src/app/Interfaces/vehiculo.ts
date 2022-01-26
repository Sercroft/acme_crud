export interface Vehiculo{
    id?: number,
    placa: string,
    color: string,
    marca: string,
    tipo_vehiculo: string,
    conductor_id?: number,
    propietario_id?: number,
    created_at: string,
    updated_at: string
}