import ComponentViewer from '@/components/component-viewer'
import AvailableJobs from '@/components/landings/career/available-jobs'
import Searching from '@/components/landings/career/searching'

const Page = () => {
  return (
    <div className="mx-auto grid max-w-2xl grid-cols-1 gap-14">
      <ComponentViewer title="Searching Section" Component={Searching} componentPath="src/components/landings/career/searching.tsx" />

      <ComponentViewer title="Available Jobs Section" Component={AvailableJobs} componentPath="src/components/landings/career/available-jobs.tsx" />
    </div>
  )
}

export default Page
