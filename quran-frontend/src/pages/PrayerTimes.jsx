import { useEffect, useState } from "react";
import api from "../services/api";

function PrayerTimes() {
    const [prayer, setPrayer] = useState(null);

    useEffect(() => {
        api.get("/prayer-times?city=Banda Aceh")
            .then((res) => {
                setPrayer(res.data.data.timings);
            })
            .catch((err) => {
                console.error(err);
            });
    }, []);

    if (!prayer) {
        return <h2>Loading...</h2>;
    }

    return (
        <div className="grid grid-cols-2 md:grid-cols-5 gap-4 mt-6">
            <div className="bg-white p-4 rounded-xl shadow">
                <h3>Subuh</h3>
                <p>{prayer.Fajr}</p>
            </div>

            <div className="bg-white p-4 rounded-xl shadow">
                <h3>Dzuhur</h3>
                <p>{prayer.Dhuhr}</p>
            </div>

            <div className="bg-white p-4 rounded-xl shadow">
                <h3>Ashar</h3>
                <p>{prayer.Asr}</p>
            </div>

            <div className="bg-white p-4 rounded-xl shadow">
                <h3>Maghrib</h3>
                <p>{prayer.Maghrib}</p>
            </div>

            <div className="bg-white p-4 rounded-xl shadow">
                <h3>Isya</h3>
                <p>{prayer.Isha}</p>
            </div>
        </div>
    );
}

export default PrayerTimes;
