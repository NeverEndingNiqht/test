<?php

include 'connect.php';

?>

<main>
    <section>
        <article>
            <h1>Welkom admin</h1>
            <h2>Overzicht</h2>
            
            <p><a href="insert.php">Domein toevoegen</a></p>

            <?php

                $sql = 'SELECT * FROM Websites ORDER BY websiteID, domainName, username, password, blogtype, category, server';
                $stmt = $conn->prepare($sql);
                $stmt->execute();

                // Alle rijen ophalen
                $Websites = $stmt->get_result()->fetch_all(MYSQLI_ASSOC); // Gebruik fetch_all() voor mysqli
            ?>

            <table>
                <thead>
                    <tr>
                        <th>websiteID</th>
                        <th>domainName</th>
                        <th>username</th>
                        <th>password</th>
                        <th>blogtype</th>
                        <th>category</th>
                        <th>server</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        // Gegevens van Websites correct tonen
                        foreach($Websites as $website) {
                            echo '
                                <tr>
                                    <td>' . $website['websiteID'] . '</td>
                                    <td>' . $website['domainName'] . '</td>
                                    <td>' . $website['username'] . '</td>
                                    <td>' . $website['password'] . '</td>
                                    <td>' . $website['blogtype'] . '</td>
                                    <td>' . $website['category'] . '</td>
                                    <td>' . $website['server'] . '</td>
                                    <td><a href="update.php?websiteID=' . $website['websiteID'] . '">Wijzig</a></td>
                                    <td><a href="delete.php?websiteID=' . $website['websiteID'] . '">Verwijder</a></td>
                                </tr>
                            ';
                        }
                    ?>
                </tbody>
            </table>
        </article>
    </section>
</main>
