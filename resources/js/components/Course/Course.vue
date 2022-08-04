<template>
  <div class="container mx-auto md:px-40 px-10 my-10">
    <div class="grid md:grid-cols-custom border-gray-400 border-solid py-10">
      <aside class="shadow">
        <ul class="p-4">
          <li
            class="
              border-gray-500 border-solid border-2
              p-2
              rounded
              my-2   
            "
            :class="index === episode.id ? 'bg-blue-900' : '' "
            v-for="(episode,i) in course.episodes" :key="episode.id"
          >
            <a href="" @click.prevent="switchEpisode(i)">{{ episode.title }}</a>
          </li>
        </ul>
      </aside>

      <main class="p-4">
        <h1 class="text-4xl pb-5" v-text="course.episodes"></h1>
        <!-- <p class="my-4">{{ course.description }}</p> -->

        <a
          href=""
          class="
            bg-blue-700
            text-white
            hover:bg-blue-800
            py-2
            px-4
            rounded
            mt-4
            inline-block
          "
          @click.prevent="show">Les conditions</a
        >
      </main>
    </div>
  </div>
</template>

<script setup>

    import useCourse from "../../api/Course/index";
    import axios from "axios";
    import {onMounted,ref} from "vue"


    const {course,getCourse} = useCourse()

    const index = ref(0)

    onMounted(function() {
        getCourse(25)
    })

    const show = () => {
        console.log(course);
    }

    const switchEpisode = (id) => {
      index.value = id
    }

</script>