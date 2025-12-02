import { useState, useEffect } from "react";
import { getUser } from "../api/api";

const useReadApi = () => {
  const [posts, setPosts] = useState([]);
  const [posts_User, setUser] = useState(null);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);

  useEffect(() => {
    const fetchData = async () => {
      try {
        setLoading(true);

        // Haal de gebruikersgegevens op met de juiste authenticatie
        const userResponse = await getUser();
        setUser(userResponse.data);

        // Haal de panoramagegevens op
        const panoramaResponse = await fetch(
          "http://127.0.0.1:8000/api/panorama/",
          {
            headers: {
              "Content-Type": "application/json",
            },
          }
        );

        if (!panoramaResponse.ok) {
          throw new Error("Panorama data kon niet worden opgehaald");
        }

        const panoramaData = await panoramaResponse.json();
        setPosts(panoramaData.pages || []);
      } catch (err) {
        console.error("Fout bij ophalen data:", err);
        setError(err.message);
      } finally {
        setLoading(false);
      }
    };

    fetchData();
  }, []);

  return { posts, loading, error, posts_User };
};

export default useReadApi;
