<!Doctype html>
<html>
    <head>
        <title>Codeigniter Board</title>
    </head>
    <body>
        <!-- <span>총 건수: <?=$total_rows?></span>-->
        <table border="1">
            <tr>
                <td>번호</td>
                <td>제목</td>
                <td>작성자</td>
                <td>날짜</td>
                <td>조회수</td>
            <tr>
            <?php
            //var_dump($Dataa);
            foreach($Dataa as $entry){
            ?>
            <tr>
                <td><?=$entry->Nseq?></td>
                <td><a href="/index.php/Board_Controller/Detaile/<?=$entry->Nseq?>"><?=$entry->Ntitle?></td>
                <td><?=$entry->Nname?></td>
                <td><?=$entry->Ndate?></td>
                <td align="center"><?=$entry->NCnt?></td>
            </tr>
            <?
            }
            ?>
            <tr>
                <td colspan="5" align="center">
                    <b>
                        <input type="button" value="쓰기" onclick="location.href='/index.php/Board_controller/write';">
                    </b>
                </td>
            </tr>
        </table>
    </body>
</html>
