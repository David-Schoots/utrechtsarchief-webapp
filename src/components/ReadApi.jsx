import { useState, useEffect } from "react";

const useReadApi = () => {
  const [posts, setPosts] = useState([]);
  const [posts_User, setUser] = useState([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);

  useEffect(() => {
    // Haal eerst de panoramagegevens op
    const fetchPanoramaData = fetch("http://127.0.0.1:8000/api/panorama/", {
      headers: {
        "Content-Type": "application/json",
      },
    });

    // Haal de gebruikersgegevens op
    const fetchUserData = fetch("http://127.0.0.1:8000/api/user", {
      headers: {
        "Content-Type": "application/json",
      },
    });

    // Voer beide requests parallel uit
    Promise.all([fetchPanoramaData, fetchUserData])
      .then(([panoramaResponse, userResponse]) => {
        if (!panoramaResponse.ok || !userResponse.ok) {
          throw new Error("Een van de API-aanroepen is mislukt");
        }
        return Promise.all([panoramaResponse.json(), userResponse.json()]);
      })
      .then(([panoramaData, userData]) => {
        setPosts(panoramaData.pages || []);
        setUser(userData);
        setLoading(false);
      })
      .catch((err) => {
        console.error("API Error:", err);
        setError(err.message);
        setLoading(false);
      });

    fetch("http://127.0.0.1:8000/api/user/", {
      "Content-Type": "application/json",
    })
      .then((response) => {
        if (!response.ok) throw new Error("Network response was not ok");
        return response.json();
      })
      .then((users) => {
        setUser(users.userdata);
      })
      .catch((err) => {
        console.error("API Error:", err);
        setError(err.message);
        setLoading(false);
      });
  }, []);

  return { posts, loading, error, posts_User };
};

export default useReadApi;
