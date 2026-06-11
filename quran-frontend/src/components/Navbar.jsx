import { Link } from "react-router-dom";

function Navbar() {
    return (
        <nav className="bg-green-700 shadow-lg">
            <div className="max-w-6xl mx-auto flex justify-between items-center p-4">
                <h1 className="text-white text-3xl font-bold">
                    🕌 Qur'an Digital
                </h1>

                <div className="flex gap-8 text-white">
                    <Link to="/">Home</Link>
                    <Link to="/prayer-times">Jadwal Sholat</Link>
                    <Link to="/search-history">Riwayat</Link>
                </div>
            </div>
        </nav>
    );
}

export default Navbar;
