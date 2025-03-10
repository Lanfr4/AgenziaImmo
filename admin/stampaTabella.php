<?php


while ($record = $resultSet->fetch_assoc()) {
                echo('<tr>
                        <th scope="row">' .$record['id'] . '</th>
                        <td>' . $record['stato'] . '</td>
                        <td>' . $record['type'] . '</td>
                        <td>' . $record['prezzoRichiesto']) . '</td>
                        <td>' . $record['superfice'] . '</td>
                        <td>' . $record['quartiere'] . '</td>
                        <td>' . $record['indirizzo'] . '</td>
                        <td>' . $record['Data_disponibilita'] . '</td>
                        <td>' . $record['Data_disponibilita'] . '</td>
                    </tr>';
            }
            echo('</tbody>
                </table>');
?>