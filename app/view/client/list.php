<section class="container-fluid d-flex mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>Cliente </th>
                    <th>Email </th>
                    <th>Telefone </th>
                    <th>Telefone - 2 </th>
                    <!-- <th>Finanças</th>
                    <th>Atualizar</th>
                    <th>Excluir</th> -->
                </tr>
            </thead>
            <tbody>
                <?php foreach($clients->rows as $item): ?>
                  
                    <tr>
                        <td> <?=   $item->name  ?> </td>
                        <td> <?=  $item->email     ?> </td>
                        <td> <?=  $item->phone     ?> </td>
                        <td> <?=   $item->phone2    ?> </td>
                        
                        <!-- <td>
                            <a href="" class="btn btn-info ">Finanças</a>
                        </td>
                        <td>
                            <a href="" class="btn btn-warning ">Atualizar</a>
                        </td>
                        <td>
                            <form action="" method="get">
                                <button class="btn btn-danger d-inline-block"><a
                                        style="text-decoration: none;">Excluir</a></button>
                            </form>
                        </td> -->
                    </tr>
                    <?php endforeach ?>
            </tbody>
        </table>
    </section>