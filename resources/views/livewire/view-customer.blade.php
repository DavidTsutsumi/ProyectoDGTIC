<div>
  <h1>Detalles del Cliente</h1>
  <table class="table">
      <tbody>
          <tr>
              <th>Nombre:</th>
              <td>{{ $customer->name }}</td>
          </tr>
          <tr>
              <th>Correo Electrónico:</th>
              <td>{{ $customer->email }}</td>
          </tr>
          <tr>
              <th>Teléfono:</th>
              <td>{{ $customer->phone }}</td>
          </tr>
          <tr>
              <th>Ciudad:</th>
              <td>{{ $customer->ciudad }}</td>
          </tr>
          <tr>
              <th>Código Postal:</th>
              <td>{{ $customer->cp }}</td>
          </tr>
      </tbody>
  </table>
</div>
