import { SVGProps } from 'react-html-props'

const Blog = (props: SVGProps) => {
  return (
    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" {...props}>
      <path
        d="M14.4878 5.4683L14.487 5.47153C14.4437 5.63524 14.2947 5.75007 14.1254 5.75007H1.87525C1.70597 5.75007 1.55662 5.63535 1.51283 5.47075C1.46931 5.30713 1.54167 5.1334 1.68934 5.04903L1.68937 5.04901L7.81365 1.5494L7.82214 1.54454L7.83044 1.53936C7.90722 1.49141 8.0624 1.47887 8.18779 1.54982C8.18795 1.54991 8.1881 1.54999 8.18825 1.55008L14.3121 5.04901C14.4605 5.13376 14.5316 5.30693 14.4878 5.4683Z"
        fill="currentColor"
        stroke="currentColor"
      />
      <path
        opacity="0.4"
        d="M4.47555 12.3751H5.56932V7.125H7.31934V12.3751H8.65647V7.125H10.4065V12.3751H11.5003V7.125H13.2503V12.4927C13.2667 12.5009 13.2831 12.4872 13.2995 12.5227L14.612 13.3978C14.932 13.611 15.0741 14.0103 14.962 14.3794C14.8499 14.7486 14.5109 15.0001 14.1253 15.0001H1.85051C1.48957 15.0001 1.14935 14.7486 1.03762 14.3794C0.925866 14.0103 1.06888 13.611 1.38976 13.3978L2.70228 12.5227C2.71787 12.4872 2.73373 12.5009 2.72552 12.4927V7.125H4.47555V12.3751Z"
        fill="currentColor"
      />
    </svg>
  )
}

export default Blog
