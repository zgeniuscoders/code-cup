import { ref } from 'vue'
import axios from 'axios'

export default function useEpisodes() {

    const episodes = ref(0)

    const getEpisodes = async (id) => {
        let data = await axios.get(`/api/episodes/${id}`)
        episodes.value = data.data.episodes
    }

    return {
        episodes,
        getCourse
    }
}
