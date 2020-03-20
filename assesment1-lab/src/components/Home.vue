<template>
    <div>
        <br>
        <b-row>
            <b-col sm="1">
            </b-col>
            <b-col sm="7">
                <b-img src="https://cdn.pixabay.com/photo/2019/07/31/01/14/kaaba-4374111_1280.jpg" fluid-grow alt="Fluid-grow image"></b-img>
            </b-col>
            <b-col sm="3">
                <b-row>
                    <b-col sm="3">
                        <b-img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS7FFrxhGko3hUyRhuXBo8cpFfx_cdN5z6syFiBHJBJNUyl2SFf" v-bind="profile" rounded="circle" alt="Circle image"></b-img>
                    </b-col>
                    <b-col sm="4">
                        <h3><b>Mu'tashim Billah</b></h3>
                    </b-col>
                </b-row>
                <br>
                <b-button block variant="primary">
                    <b-icon icon="download"></b-icon> Free Image Downlaod</b-button>
                <br>
                <p>Download another image</p>
                <b-row>
                    <b-col sm="6">
                        <b-img src="https://cdn.pixabay.com/photo/2015/12/05/06/20/kid-1077793_1280.jpg" fluid alt="Fluid image"></b-img>
                    </b-col>
                    <b-col sm="6">
                        <b-img src="https://cdn.pixabay.com/photo/2016/01/31/18/56/person-1171956_1280.jpg" fluid alt="Fluid image"></b-img>
                    </b-col>
                </b-row>
                <br>
                <b-row>
                    <b-col sm="6">
                        <b-img src="https://cdn.pixabay.com/photo/2015/01/31/08/56/arabs-618308_1280.jpg" fluid alt="Fluid image"></b-img>
                    </b-col>
                    <b-col sm="6">
                        <b-img src="https://cdn.pixabay.com/photo/2012/11/22/08/19/mecca-66970_1280.jpg" fluid alt="Fluid image"></b-img>
                    </b-col>
                </b-row>
            </b-col>
            <b-col sm="1">
            </b-col>
        </b-row>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                profile: {
                    width: 75,
                    height: 75,
                    class: 'm1'
                }
            }
        }
    }
</script>