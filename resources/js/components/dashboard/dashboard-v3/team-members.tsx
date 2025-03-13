import { Avatar, AvatarFallback, AvatarImage } from '@/components/ui/avatar'
import { Button } from '@/components/ui/button'
import { Card } from '@/components/ui/card'
import { cn } from '@/lib/utils'
import { nanoid } from 'nanoid'
import { HTMLAttributes } from 'react'

type Props = HTMLAttributes<HTMLDivElement>

const TeamMembers = ({ className, ...props }: Props) => {
  return (
    <Card className={cn('p-6', className)} {...props}>
      <div className="">
        <h6 className="text-sm font-semibold">Team Members</h6>
        <p className="text-secondary-foreground text-sm">Invite your team member to collaborate.</p>
      </div>

      <div className="mt-7 flex flex-col gap-4">
        {DATA.map(({ id, name, role, image, status }) => (
          <div key={id} className="flex items-center justify-between">
            <div className="flex items-center gap-3">
              <Avatar className="h-11 w-11">
                <AvatarImage src={image} alt="@shadcn" />
                <AvatarFallback>CN</AvatarFallback>
              </Avatar>
              <div>
                <p className="text-lg font-semibold">{name}</p>
                <p className="text-secondary-foreground text-sm">{role}</p>
              </div>
            </div>

            <Button variant="secondary" className="text-primary">
              {status}
            </Button>
          </div>
        ))}
      </div>
    </Card>
  )
}

// CUSTOM DUMMY DATA SET
const DATA = [
  {
    id: nanoid(),
    name: 'Gage Paquette',
    role: 'Member',
    status: 'Online',
    image: '/assets/avatars/Ellipse-1.png',
  },
  {
    id: nanoid(),
    name: 'Lara Harvey',
    role: 'Director',
    status: 'Away',
    image: '/assets/avatars/Ellipse-2.png',
  },
  {
    id: nanoid(),
    name: 'Evan Scott',
    role: 'Manager',
    status: 'Offline',
    image: '/assets/avatars/Ellipse-3.png',
  },
  {
    id: nanoid(),
    name: 'Benja Johnston',
    role: 'Member',
    status: 'Online',
    image: '/assets/avatars/Ellipse-4.png',
  },
  {
    id: nanoid(),
    name: 'Aston Agar',
    role: 'Owner',
    status: 'Away',
    image: '/assets/avatars/Ellipse-4.png',
  },
]

export default TeamMembers
