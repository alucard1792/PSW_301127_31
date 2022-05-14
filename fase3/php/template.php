<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

<h2 style="text-align:center;">Reporte de la tabla productos:</h2>

<table>
   <thead>
    <tr>
      <th>Codigo</th>
      <th>Nombre</th>
      <th>Marca</th>
      <th>Precio</th>
      <th>Cantidad</th>
    </tr>
  </thead>
  <tbody>
    {0}
  </tbody>
  <tfoot>
    <tr>
      <td style="border:none;"></td>
      <td style="border:none;"></td>
      <td style="border:none;"></td>
      <td>Total cantidad de productos:</td>
      <td>{1}</td>
    </tr>
  </tfoot>
</table>