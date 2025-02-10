<?php

$link = false;

function openDB()
{
    global $link;

    $link = mysqli_connect("localhost", "root", "", "golovan_portfolio");
    mysqli_query($link, "SET NAMES UTF8");
}

function closeDB()
{
    global $link;
    $link = false;
}

function getAboutMe()
{
    global $link;
    openDB();

    $result = mysqli_query($link, "SELECT * FROM about_me");

    closeDB();
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}
function getLink()
{
    global $link;
    openDB();

    $result = mysqli_query($link, "SELECT * FROM links");

    closeDB();
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getImages()
{
    global $link;
    openDB();

    $result = mysqli_query($link, "SELECT * FROM images");
    if ($result->num_rows > 0) {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);

        while ($row = $result->fetch_assoc()) {

            $imageType = finfo_buffer($finfo, $row['image'], FILEINFO_MIME_TYPE);


            $imageBase64 = base64_encode($row['image']);
            $images[] = [
                'id' => $row['id'],
                'src' => 'data:' . $imageType . ';base64,' . $imageBase64,
                'type' => $imageType,
                'desc' => $row['description']
            ];
        }

        finfo_close($finfo);
    } else {
        $images = [];
    }

    closeDB();
    return $images;
}

?>