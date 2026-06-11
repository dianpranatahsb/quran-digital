import { useEffect, useState } from "react";
import api from "../services/api";
import { Link } from "react-router-dom";

function Home() {
    const [search, setSearch] = useState("");
    const [surahs, setSurahs] = useState([]);

    useEffect(() => {
        api.get("/surahs")
            .then((res) => {
                setSurahs(res.data.data);
            })
            .catch((err) => {
                console.error(err);
            });
    }, []);
    const saveSearch = async (keyword) => {
        if (!keyword.trim()) return;

        try {
            await api.post("/search-history", {
                keyword,
            });
        } catch (error) {
            console.error(error);
        }
    };

    return (
        <div className="max-w-5xl mx-auto p-6">
            <div className="text-center mb-10">
                <p className="arabic text-5xl text-green-800">
                    بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم
                </p>

                <p className="text-gray-500 mt-3">
                    Dengan nama Allah Yang Maha Pengasih lagi Maha Penyayang
                </p>
            </div>
            <div className="mb-8">
                <input
                    type="text"
                    placeholder="🔍 Cari Surah..."
                    value={search}
                    onChange={(e) => setSearch(e.target.value)}
                    onKeyDown={(e) => {
                        if (e.key === "Enter") {
                            saveSearch(search);
                        }
                    }}
                    className="
    w-full
    p-4
    rounded-xl
    border
    border-gray-300
    shadow-sm
  "
                />
            </div>

            <h1 className="text-5xl font-bold text-center mb-10">
                📖 Al-Qur'an Digital
            </h1>

            {surahs
                .filter((surah) =>
                    surah.englishName
                        .toLowerCase()
                        .includes(search.toLowerCase()),
                )
                .map((surah) => (
                    <Link
                        key={surah.number}
                        to={`/surah/${surah.number}`}
                        className="block"
                    >
                        <div
                            className="
              bg-white
              rounded-2xl
              shadow-md
              p-5
              mb-4
              hover:shadow-xl
              hover:-translate-y-1
              transition-all
              duration-300
              border-l-4
              border-green-700
            "
                        >
                            <div className="flex justify-between items-center">
                                <div>
                                    <div className="text-sm text-gray-500">
                                        Surah #{surah.number}
                                    </div>

                                    <h2 className="text-xl font-bold mt-1">
                                        {surah.englishName}
                                    </h2>

                                    <p className="text-gray-500">
                                        {surah.numberOfAyahs} Ayat
                                    </p>

                                    <p className="text-green-700 text-sm">
                                        {surah.revelationType}
                                    </p>
                                </div>

                                <div className="text-right">
                                    <p className="arabic text-4xl text-green-800">
                                        {surah.name}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </Link>
                ))}
        </div>
    );
}

export default Home;
