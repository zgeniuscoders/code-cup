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
              flex
              justify-between
              items-center
              gap-4
            "
            :class="index === episode.id ? 'bg-blue-900' : ''"
            v-for="(episode, i) in course.episodes"
            :key="episode.id"
          >
            <a href="" @click.prevent="switchEpisode(i)">{{ episode.title }}</a>
            <progress-button
              :episode-id="episode.id"
              :watched-episode="watched"
            />
          </li>
        </ul>
      </aside>

      <main class="py-4 px-8">
        <h1 class="text-4xl pb-2">{{ course.title }}</h1>

        <div class="py-4">
          <progress-bar
            :watched-episodes="watched"
            :episodes="course.episodes"
          />
        </div>

        <h2 class="text-3xl py-2">{{ course.episodes[index].title }}</h2>
        <p class="my-4">{{ course.episodes[index].content }}</p>

        <div class="flex justify-between items-center">
          <button
            v-if="index > 0"
            @click="privious"
            type="button"
            class="
              text-white
              py-2
              px-4
              rounded
              mt-4
              inline-block
              bg-blue-800
              active:outline active:outline-3 active:outline-blue-900
            "
          >
            Precedent
          </button>

          <button
            v-if="index < course.episodes.length - 1"
            @click="next"
            type="button"
            class="
              text-white
              py-2
              px-4
              rounded
              mt-4
              inline-block
              bg-blue-800
              active:outline active:outline-3 active:outline-blue-900
            "
          >
            Suivant
          </button>
        </div>
      </main>
    </div>
  </div>
</template>

<script>
import ProgressButton from "./ProgressButton";
import ProgressBar from "./ProgressBar";

export default {
  props: ["course", "watched"],

  components: {
    ProgressButton,
    ProgressBar,
  },

  data() {
    return {
      index: 0,
    };
  },

  methods: {
    switchEpisode(id) {
      this.index = id;
    },
    next() {
      this.index++;
      localStorage.setItem(
        "courseIndex",
        JSON.stringify({ index: this.index, courseId: this.course.id })
      );
    },

    privious() {
      this.index--;
      localStorage.setItem(
        "courseIndex",
        JSON.stringify({ index: this.index, courseId: this.course.id })
      );
    },
  },
  mounted() {
    const items = localStorage.getItem("courseIndex")
      ? JSON.parse(localStorage.getItem("courseIndex"))
      : "";
    if (items.courseId === this.course.id) {
      this.index = items.index;
    }
  },
};
</script>