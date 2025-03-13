import Navbar from '@/components/landings/intro/navbar-2'
import ThemeBasedImage from '@/components/theme-based-image'
import { Link } from '@inertiajs/react'
import { nanoid } from 'nanoid'

const Page = () => {
  return (
    <div>
      <Navbar />
      <div className="mx-auto max-w-[1000px] px-4 py-20">
        <h5 className="mb-6 text-center font-semibold">Dashboard Pages</h5>

        <div className="bg-card grid w-full grid-cols-1 gap-12 p-6 sm:grid-cols-2 md:grid-cols-3 md:gap-6">
          {dashboards.map(({ id, route, light, dark }) => (
            <Link key={id} href={route} target="_blank" className="group relative mx-auto max-w-[300px] overflow-hidden rounded-lg md:mx-0">
              <ThemeBasedImage key={id} width={300} height={220} lightSrc={light} darkSrc={dark} alt="shadcn-kit" />

              <div className="text-primary-foreground absolute top-0 left-0 flex h-full w-full items-center justify-center bg-black/40 font-semibold opacity-0 transition-all duration-300 group-hover:opacity-100">
                <p>View Page</p>
              </div>
            </Link>
          ))}
        </div>
      </div>
    </div>
  )
}

const dashboards = [
  {
    id: nanoid(),
    route: '/dashboard/dashboard-v1',
    light: '/assets/pages/Dashboard-01 light.png',
    dark: '/assets/pages/Dashboard-01 dark.png',
  },
  {
    id: nanoid(),
    route: '/dashboard/dashboard-v2',
    light: '/assets/pages/Dashboard-02 light.png',
    dark: '/assets/pages/Dashboard-02 dark.png',
  },
  {
    id: nanoid(),
    route: '/dashboard/dashboard-v3',
    light: '/assets/pages/Dashboard-03 light.png',
    dark: '/assets/pages/Dashboard-03 dark.png',
  },
  {
    id: nanoid(),
    route: '/dashboard/dashboard-v4',
    light: '/assets/pages/Dashboard-04 light.png',
    dark: '/assets/pages/Dashboard-04 dark.png',
  },
  {
    id: nanoid(),
    route: '/dashboard/dashboard-v5',
    light: '/assets/pages/Dashboard-05 light.png',
    dark: '/assets/pages/Dashboard-05 dark.png',
  },
  {
    id: nanoid(),
    route: '/dashboard/analytics',
    light: '/assets/pages/Dashboard-06 light.png',
    dark: '/assets/pages/Dashboard-06 dark.png',
  },
  {
    id: nanoid(),
    route: '/dashboard/finance-1',
    light: '/assets/pages/Dashboard-07 light.png',
    dark: '/assets/pages/Dashboard-07 dark.png',
  },
  {
    id: nanoid(),
    route: '/dashboard/finance-2',
    light: '/assets/pages/Dashboard-08 light.png',
    dark: '/assets/pages/Dashboard-08 dark.png',
  },
  {
    id: nanoid(),
    route: '/dashboard/ecommerce',
    light: '/assets/pages/Dashboard-09 light.png',
    dark: '/assets/pages/Dashboard-09 dark.png',
  },
  {
    id: nanoid(),
    route: '/dashboard/project-management',
    light: '/assets/pages/Dashboard-10 light.png',
    dark: '/assets/pages/Dashboard-10 dark.png',
  },
  {
    id: nanoid(),
    route: '/dashboard/crm',
    light: '/assets/pages/Dashboard-11 light.png',
    dark: '/assets/pages/Dashboard-11 dark.png',
  },
  {
    id: nanoid(),
    route: '/dashboard/logistics',
    light: '/assets/pages/Dashboard-12 light.png',
    dark: '/assets/pages/Dashboard-12 dark.png',
  },
  {
    id: nanoid(),
    route: '/dashboard/marketing',
    light: '/assets/pages/Dashboard-13 light.png',
    dark: '/assets/pages/Dashboard-13 dark.png',
  },
]

export default Page
