<?php
if(!empty($_SESSION['sumessage'])){
    echo "<script>
            Swal.fire({
                title: '{$_SESSION['sutitle']}',
                text: '{$_SESSION['sumessage']}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
          </script>";
    $_SESSION['sutitle']=null;
    $_SESSION['sumessage']=null;
}
if(!empty($_SESSION['ermessage'])){
    echo "<script>
            Swal.fire({
                icon: 'error',
                title: '{$_SESSION['ertitle']}',
                text: '{$_SESSION['ermessage']}',
                confirmButtonText: 'OK'
              });
          </script>";
    $_SESSION['ertitle']=null;
    $_SESSION['ermessage']=null;
}

?>