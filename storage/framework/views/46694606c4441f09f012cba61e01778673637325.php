<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php if (! empty(trim($__env->yieldContent('title')))): ?>
        <title><?php echo $__env->yieldContent('title'); ?></title>
    <?php else: ?>
        <title>Surat</title>
    <?php endif; ?>
</head>

<body>
    <table style="width:100%">
        <tbody>
            <tr>
                <td style="width:20%;">
                    <img src="<?php echo e(asset('')); ?><?php echo e(kantorDesa() ? 'kantor-desa/' . kantorDesa()->logo : 'logo.png'); ?>"
                        alt="Logo" style="width:100px" />
                </td>
                <td style="width:50%; text-align:center;">
                    <strong style="font-size:18px">
                        PEMERINTAH KABUPATEN ACEH BESAR
                    </strong><br>
                    <strong style="font-size:18px">
                        KECAMATAN BLANG BINTANG 
                    </strong><br>
                    <strong style="font-size: 18px">
                        GAMPONG COT JAMBO
                    </strong><br>
                    <span style="font-size:14px">
                        Jl. Blang Bintang - Montasik,
                        Kode Pos 23360
                    </span>
                </td>
                <td style="width: 25%;"></td>
            </tr>
        </tbody>
    </table>
    <hr>
    <?php echo $__env->yieldContent('content'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\desaCjb\resources\views/pdf/layouts/main.blade.php ENDPATH**/ ?>