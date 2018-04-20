#!/bin/bash/
optipng public/smarty/assets/images/*.png;
optipng public/smarty/assets/images/demo/*.png;
optipng public/smarty/assets/images/demo/1200x800/*.png;
optipng public/smarty/assets/images/demo/content_slider/*.png;
optipng public/smarty/assets/images/demo/layerslider/*.png;
optipng public/smarty/assets/images/demo/logos/*.png;
optipng public/smarty/assets/images/demo/people/*.png;
optipng public/smarty/assets/images/cursosilernus/*.png;

echo "optimizadas las imagenes .png";

jpegoptim --strip-all public/smarty/assets/images/*.jpg;
jpegoptim --strip-all public/smarty/assets/images/demo/*.jpg;
jpegoptim --strip-all public/smarty/assets/images/demo/1200x800/*.jpg;
jpegoptim --strip-all public/smarty/assets/images/demo/content_slider/*.jpg;
jpegoptim --strip-all public/smarty/assets/images/demo/layerslider/*.jpg;
jpegoptim --strip-all public/smarty/assets/images/demo/logos/*.jpg;
jpegoptim --strip-all public/smarty/assets/images/demo/people/*.jpg;
jpegoptim --strip-all public/smarty/assets/images/cursosilernus/*.jpg;

echo "optimizadas las imagenes .jpg";


