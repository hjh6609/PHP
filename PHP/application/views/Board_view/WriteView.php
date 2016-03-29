<!Doctype html>
<html>
    <head>
        <title>Write View</title>
        <script>
            function check_form()
            {
                //alert(11);  
                if(document.wform.txtTitle.value == '')
                {
                    alert('제목을 입력하세요.');
                    document.wform.txtTitle.focus();
                    return;
                }else if(document.wform.txtNm.value == "" ){
                    alert('이름을 입력하세요.');
                    document.wform.txtNm.focus();
                    return;
                }else if(document.wform.txtCon.value == "" ){
                    alert('내용을 입력하세요.');
                    document.wform.txtCon.focus();
                    return;
                }
                document.wform.submit();
            }
        </script>
    </head>
    <body>
        <form name="wform" method="post" action="writepost" enctype="multipart/form-data">
            <table>
            <tr>
                <td>제목</td>
                    <td><input type="text" name="txtTitle" id="test" size="20"></td>
                </tr>
                <tr>
                    <td>이름</td>
                    <td><input type="text" name="txtNm" size="20"></td>
                </tr>
                <tr>
                    <td colspan="2"><textarea rows="10" cols="30" name="txtCon"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="button" value="등록" onclick="check_form();"</td>
                </tr>
            </table>
        </form>
    </body>
</html>