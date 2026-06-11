import { useEffect, useState } from "react";
import { useParams } from "react-router-dom";
import api from "../services/api";
import { Link } from "react-router-dom";

function SurahDetail() {
    const { id } = useParams();

    const [surah, setSurah] = useState(null);

    useEffect(() => {
        api.get(`/surahs/${id}`)
            .then((res) => {
                setSurah(res.data.data);
            })
            .catch((err) => {
                console.error(err);
            });
    }, [id]);

    if (!surah) {
        return <h2>Loading...</h2>;
    }

    return (
        <div style={{ padding: "20px" }}>
            <h1>{surah.englishName}</h1>

            <h2>{surah.name}</h2>

            <p>{surah.numberOfAyahs} Ayat</p>

            {surah.ayahs.map((ayah) => (
                <div
                    key={ayah.number}
                    style={{
                        marginBottom: "20px",
                        padding: "10px",
                        borderBottom: "1px solid #ddd",
                    }}
                >
                    <h3>{ayah.numberInSurah}</h3>

                    <p
                        style={{
                            fontSize: "28px",
                            textAlign: "right",
                        }}
                    >
                        {ayah.text}
                    </p>
                </div>
            ))}
        </div>
    );
}

export default SurahDetail;
